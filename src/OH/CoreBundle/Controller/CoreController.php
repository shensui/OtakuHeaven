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

/*les entitée*/
use OH\CoreBundle\Entity\Contacte;

class CoreController extends Controller{

    public function IndexAction(){
        $teste = "<html><head></head><body><p>ma premiere page, <br/> elle est encore viede mais ca arrive.</p></body></html>";
        dump($this->getUser());
        return new Response($teste);
    }

    /**
     * Action de la page de contact.
     * @param Request $request
     */
    public function ContacteAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $message = new Contacte();
        //l'entité cantact ici
        $adress = array(
            'adr_rue'       => 'Rue Aux Thiers',
            'adr_Num'       => '13',
            'adr_cp'        => '4260',
            'adr_ville'     => 'Braives',
            'adr_email'     => 'herbale2@hotmail.com',
            'tel_num'       => '019/69.80.95',
            'gsm_num'       => '0472/80.37.75'
        );
        if($user){
            /*
             * si le visiteur est un membre enregistré,
             * on complette les champs pseudo et mail avec ses information.
             */
        }

        dump($user);


    }

}
