<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderSuccessController extends AbstractController
{
    private $entityMAnager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityMAnager = $entityManager;
    }

    #[Route('/commande/merci/{stripeSessionId}', name: 'app_order_validate')]
    public function index(Cart $cart, $stripeSessionId): Response
    {
        $order = $this->entityMAnager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        if (!$order || $order->getUser()!=$this->getUser()){
            return $this->redirectToRoute('home');
        }




        if(!$order->isIsPaid()){
            //Vider la session cart
            $cart->remove();
            //modifier le statu de la commande en isPaid
            $order->setIsPaid(1);
            $this->entityMAnager->flush();
        }
        return $this->render('order_success/index.html.twig',[
            'order'=>$order
        ]);
    }
}
