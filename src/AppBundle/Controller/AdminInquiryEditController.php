<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inquiry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/inquiry")
 */
class AdminInquiryEditController extends Controller
{
    /**
     * @Route("/{id}/edit")
     * @ParamConverter("inquiry", class="AppBundle:Inquiry")
     * @Method("get")
     */
    public function inputAction(Inquiry $inquiry)
    {
        $form = $this->createInquiryForm($inquiry);

        return $this->render('Admin/Inquiry/edit.html.twig',
            [
                'form' => $form->createView(),
                'inquiry' => $inquiry
            ]
        );
    }

    /**
     * @Route("/{id}/edit")
     * @ParamConverter("inquiry", class="AppBundle:Inquiry")
     * @Method("post")
     */
    public function inputPostAction(Request $request, Inquiry $inquiry)
    {
        $form = $this->createInquiryForm($inquiry);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl(
                'app_admininquirylist_index'
            ));
        }

        return $this->render('Admin/Inquiry/edit.html.twig',
            [
                'form' => $form->createView(),
                'inquiry' => $inquiry
            ]
        );
    }

    private function createInquiryForm($inquiry)
    {
        return $this->createFormBuilder($inquiry,
            ["validation_groups" => ["admin"]])
            ->add('processStatus', 'choice', [
                'choices' => [
                    '未対応',
                    '対応中',
                    '対応済',
                ],
                'empty_data' => 0,
                'expanded' => true,
            ])
            ->add('processMemo', 'textarea')
            ->add('submit', 'submit', [
                'label' => '保存',
            ])
            ->getForm();
    }
}
