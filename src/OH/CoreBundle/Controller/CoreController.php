<?php
/**
 * Created by PhpStorm.
 * User: Frédéric
 * Date: 07-05-15
 * Time: 15:27
 */

namespace OH\CoreBundle\Controller;

/*les use generique*/
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class CoreController extends Controller{

    public function IndexAction(){
        $teste = "<html><head></head><body><p>ma premiere page</p></body></html>";
        return new Response($teste);
    }

    /**
     * Action de la page de contact.
     * @param Request $request
     */
    public function ContacteAction(Request $request){}

}
