<?php

namespace AppBundle\Controller;

use AppBundle\Form\AjaxSearchEventType;
use AppBundle\Form\DatePickerSearchEventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="front_homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //Trouve tous les events par idEvent
        $idType = $em->getRepository('AppBundle:Event')
            ->findByIdType();

        $Events = [];

        //Pour chaque idEvent on trouve les 5 plus proches events par catégories
        foreach ($idType as $key => $value) {
            $Events[] = $em->getRepository('AppBundle:Event')->findByIdTypeOderByDate($value["idType"]);
        }
        //Remove empty elements from an array
        $Events = array_filter($Events);

        // On récupère le formulaire de recherche autocomplétion
        $ajaxform = $this->createForm(AjaxSearchEventType::class);

        // Requête envoyée par le formulaire
        $ajaxform->handleRequest($request);

        // On récupère le formulaire de recherche par date
        $dateform = $this->createForm(DatePickerSearchEventType::class);

        // Requête envoyée par le formulaire
        $dateform->handleRequest($request);

        // Si le formulaire ajax a été soumi et valide
        if ($ajaxform->isSubmitted() && $ajaxform->isValid()) {
            // Récupère le contenu du formulaire posté
            $data = $request->get('ajax_search_event');
            // Si recherche par titre
            if (!empty($data["search"])) {
                // Trouve l'event par le titre
                $Event = $em->getRepository('AppBundle:Event')->findOneBy(array("titreEvent" => $data));

                return $this->render('@App/frontOffice/searchEvent.html.twig', ['Event' => $Event]);

            }
        }

        // Si le formulaire par date a été soumi et valide
        if ($dateform->isSubmitted() && $dateform->isValid()) {
            // Récupère le contenu du formulaire posté
            $data = $request->get('date_picker_search_event');
            // Si recherche par date
            if (!empty($data["dateDebut"]) && !empty($data["dateFin"])) {
                // Conversion de la date dd/mm/yyyy => yyyy-mm-dd
                $dateDebut = $this->convertDate($data["dateDebut"]);
                // Conversion de la date dd/mm/yyyy => yyyy-mm-dd
                $dateFin = $this->convertDate($data["dateFin"]);
                // Trouve les events entre deux dates (debut et fin)
                $Event = $em->getRepository('AppBundle:Event')->findByDatePicker($dateDebut, $dateFin);

                return $this->render('@App/frontOffice/searchEvent.html.twig', ['Events' => $Event, 'dateDebut' => $dateDebut, 'dateFin' => $dateFin]);
            }
        }

        // On génère le html du formulaire autocomplétion ajax crée
        $ajaxFormview = $ajaxform->createView();

        // On génère le html du formulaire par date crée
        $dateFormview = $dateform->createView();

        // On rend la vue
        return $this->render('@App/frontOffice/index.html.twig', ['Events' => $Events, 'ajaxForm' => $ajaxFormview, 'dateForm' => $dateFormview]);
    }

    /**
     * @Route("/view/{id}", name="front_view_event", requirements={"id" = "\d+"})
     * @param $Event
     * @return Response
     */
    public function viewAction(Event $Event)
    {
        // On rend la vue
        return $this->render('@App/frontOffice/viewEvent.html.twig', ['Event' => $Event]);
    }

    /**
     * @Route("/seat", name="front_seat_event")
     * @return Response
     */
    public function seatAction()
    {
        // On rend la vue
        return $this->render('@App/frontOffice/seatEvent.html.twig', []);
    }

    /**
     * @Route("/search", name="front_search")
     * @param Request $request
     * @return Response
     */
    public function searchAction(Request $request)
    {
        // Si c'est une requête Ajax
        if ($request->isXmlHttpRequest()) {
            $data = $request->get('input');

            $em = $this->getDoctrine()->getManager();

            $results = $em->getRepository('AppBundle:Event')->findByTitreEvent($data);

            $eventList = '<ul id="matchList" class="list-group">';
            foreach ($results as $result) {
                $matchStringBold = preg_replace('/(' . $data . ')/i', '<strong>$1</strong>', $result['titreEvent']); // Replace text field input by bold one
                $eventList .= '<li class="list-group-item" id="' . $result['titreEvent'] . '">' . $matchStringBold . '</li>'; // Create the matching list - we put maching name in the ID too
            }
            $eventList .= '</ul>';

            return new JsonResponse(array('eventList' => $eventList));
        }
    }

    private function convertDate($date)
    {
        $tempDate = explode('/', $date);
        $convertedDate = $tempDate[2] . '-' . $tempDate[1] . '-' . $tempDate[0];

        return $convertedDate;
    }

}
