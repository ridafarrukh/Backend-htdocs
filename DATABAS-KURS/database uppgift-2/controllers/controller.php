<?php

class Controller
{
    private $model = null;
    private $view  = null;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function main()
    {
        $this->getHeader();

        if (isset($_GET['id'])) {
            $this->getOrderForm();
        } else if (isset($_GET['showAllProducts'])) {
            $this->getAllProducts();
        } else if (isset($_GET['showConfirmationPage'])) {
            $this->getConfirmForm();
        } else if (isset($_GET['showContactForm'])) {
            $this->getContactForm();
        } else if (isset($_GET['showMessageConfirmPage'])) {
            $this->getMessageConfirm();
        } else ($this->view->viewFirstPage());

        $this->getFooter();
    }

    public function getHeader()
    {
        $this->view->viewHeader("My litte webshop");
    }

    public function getFooter()
    {
        $this->view->viewFooter();
    }

    public function getAllProducts()
    {
        $products = $this->model->fetchAllProducts();
        $this->view->viewAllProducts($products);
    }


    public function getConfirmForm()
    {
        $this->view->viewSimpleConfirmMessage();
    }

    public function getContactForm()
    {
        $this->view->viewContactForm();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->processContactForm();
    }
}

    public function getMessageConfirm()
    {
        $this->view->viewConfirmMessageText();
    }

    public function getOrderForm()
    {
        $id = $this->sanitize($_GET['id']);
        $product = $this->model->fetchProductById($id);

        if ($product) {
            $this->view->viewOneproduct($product);
            $this->view->viewOrderForm($product);
        } else {
            header("Location:index.php");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->processOrderForm();
        }
    }

    public function processOrderForm()
    {
        $customer_name    = $this->sanitize($_POST['customer_name']);
        $customer_tel     = $this->sanitize($_POST['customer_tel']);
        $customer_email   = $this->sanitize($_POST['customer_email']);
        $customer_address = $this->sanitize($_POST['customer_address']);
        $product_id       = $this->sanitize($_POST['product_id']);
        $confirm     = $this->model->saveOrder($customer_name, $customer_tel, $customer_email, $customer_address, $product_id);

        if ($confirm) {
            header("Location:index.php?showConfirmationPage");
        } else {
            $this->view->viewErrorMessage($customer_name);
        }
    }

    public function processContactForm()
    {
        $contactperson_name    = $this->sanitize($_POST['contactperson_name']);
        $contactperson_tel     = $this->sanitize($_POST['contactperson_tel']);
        $contactperson_email   = $this->sanitize($_POST['contactperson_email']);
        $contactperson_message = $this->sanitize($_POST['contactperson_message']);
        $confirm     = $this->model->saveMessage($contactperson_name, $contactperson_tel, $contactperson_email, $contactperson_message);

        if ($confirm) {
            header("Location:index.php?showMessageConfirmPage");
        } else {
            $this->view->viewErrorMessage($contactperson_name);
        }
    }

    /**
     * Sanitize Inputs
     * https://www.w3schools.com/php/php_form_validation.asp
     */
    public function sanitize($text)
    {
        $text = trim($text);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);
        return $text;
    }
}