<?php
include "../model/client_class.php";
include "../model/item_class.php";

$client = new Client();
$product = new Item();

$client->setName($_POST['f_name']);
$client->setAddress($_POST['f_address']);
$client->setP_number($_POST['f_pnumber']);

$product->name = $_POST['f_product'];

switch ($product->name) {
    case 'Arroz 1kg':
        $product_type = "Alimentação";
        $product->value = 7.50;
        break;

    case 'Feijão 1kg':
        $product_type = "Alimentação";
        $product->value = 5.00;
        break;

    case 'Papel-higiênico Pacote c/ 20un':
        $product_type = "Higiene pessoal";
        $product->value = 12.30;
        break;
}

$product_amount = $_POST['f_amount'];
$product_payForm = $_POST['f_payForm'];

switch ($_POST['f_delivery']) {
    case 's':
        $end_value = ($product->value * $product_amount) + 10;
        $delivery_text = "Sim";
        break;
    
    case 'n':
        $end_value = ($product->value * $product_amount);
        $delivery_text = "Não";
        break;
}

echo '<h1>Compra efetuada!</h1>';
echo $client->getName() . ' sua compra deu: R$' . $end_value;
echo '<br/>Nome do produto: ' . $product->name;
echo '<br/>Valor do produto: R$' . $product->value;
echo '<br/>Quantidade: ' . $product_amount . 'un';
echo '<br/>Forma de pagamento: ' . $product_payForm;
echo '<br/>Entrega solicitada: ' . $delivery_text;
echo '<br/>Endereço informado: ' . $client->getAddress();
echo '<br/>Telefone informado: ' . $client->getP_number();