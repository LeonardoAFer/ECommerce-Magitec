<?php

namespace App\Pix;

class Payload {

      /**
   * IDs do Payload do Pix
   * @var string
   */
  const ID_PAYLOAD_FORMAT_INDICATOR = '00';
  const ID_MERCHANT_ACCOUNT_INFORMATION = '26';
  const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = '00';
  const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = '01';
  const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = '02';
  const ID_MERCHANT_CATEGORY_CODE = '52';
  const ID_TRANSACTION_CURRENCY = '53';
  const ID_TRANSACTION_AMOUNT = '54';
  const ID_COUNTRY_CODE = '58';
  const ID_MERCHANT_NAME = '59';
  const ID_MERCHANT_CITY = '60';
  const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = '62';
  const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = '05';
  const ID_CRC16 = '63';


  /**
   * Chave pix
   * @var string
   */
  private $pixKey;

    /**
   * Descrição do pagamento
   * @var string
   */
  private $description;

  /**
   * Nome do comprador
   * @var string
   */
  private $MerchantName;

  /**
   * Cidade do comprador
   * @var string
   */
  private $MerchantCity;

  /**
   * ID da transação pix
   * @var string
   */
  private $txid;

    /**
   * Valor da transação
   * @var string
   */
  private $amount;

  /**
   * Metodo responsavel pro defenir o valor do pix key 
   * @param string $pixKey
   */
public function setPixKey($pixKey){
    $this->pixKey = $pixKey;
    return $this;
}

  /**
   * Metodo responsavel pro defenir o valor do description
   * @param string $description
   */
  public function setDescription($description){
    $this->description = $description;
    return $this;
}

  /**
   * Metodo responsavel pro defenir o valor do MerchantName
   * @param string $MerchantName
   */
  public function setMerchantName($MerchantName){
    $this->MerchantName = $MerchantName;
    return $this;
}

  /**
   * Metodo responsavel pro defenir o valor do MerchantCity
   * @param string $MerchantCity
   */
  public function setMerchantCity($MerchantCity){
    $this->MerchantCity = $MerchantCity;
    return $this;
}

  /**
   * Metodo responsavel pro defenir o valor do txid
   * @param string $txid
   */
  public function setTxid($txid){
    $this->txid = $txid;
    return $this;
}

  /**
   * Metodo responsavel pro defenir o valor do amount
   * @param float $amount
   */
  public function setAmount($amount){
    $this->amount = (string)number_format($amount,2,'.','');
    return $this;
}

 /**
   * Metodo responsavel por retornar o valor completo de um objeto do payload
   * @param string id
   * @param string value
   * @return string $id.$size.$value
   */
private function getValue($id,$value){
$size = str_pad(strlen($value),2,'0',STR_PAD_LEFT);

return $id.$size.$value;
}

 /**
   * Metodo responsavel por retoranar os valores completos da informação da conta
   * @return string
   */
private function getMerchantAccountInformation(){
$gui = $this->getValue(self::ID_MERCHANT_ACCOUNT_INFORMATION_GUI,'br.gov.bcb.pix');
$key = $this->getValue(self::ID_MERCHANT_ACCOUNT_INFORMATION_KEY, $this->pixKey);
$description = strlen($this->description) ? $this->getValue(self::ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION,$this->description) : '';
return $this->getValue(self::ID_MERCHANT_ACCOUNT_INFORMATION, $gui.$key.$description);

}


 /**
   * Metodo responsavel por retornar os valores completos do campo adicional do pix (txid)
   * @return string
   */
private function getAdditionalDataFieldTemplate(){
$txid = $this->getValue(self::ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID,$this->txid);

return $this->getValue(self::ID_ADDITIONAL_DATA_FIELD_TEMPLATE,$txid);



}

  /**
   * Metodo responsavel por gerar o codigo do pix
   * @return string
   */
  public function getPayload(){
$payload = $this->getvalue(self::ID_PAYLOAD_FORMAT_INDICATOR,'01').
$this->getMerchantAccountInformation().
$this->getValue(self::ID_MERCHANT_CATEGORY_CODE,'0000').
$this->getValue(self::ID_TRANSACTION_CURRENCY,'986').
$this->getValue(self::ID_TRANSACTION_AMOUNT,$this->amount).
$this->getValue(self::ID_COUNTRY_CODE,'BR').
$this->getValue(self::ID_MERCHANT_NAME,$this->MerchantName).
$this->getValue(self::ID_MERCHANT_CITY,$this->MerchantCity).
$this->getAdditionalDataFieldTemplate();



return $payload.$this->getCRC16($payload);


}



  private function getCRC16($payload) {
     
      $payload .= self::ID_CRC16.'04';

   
      $polinomio = 0x1021;
      $resultado = 0xFFFF;

      if (($length = strlen($payload)) > 0) {
          for ($offset = 0; $offset < $length; $offset++) {
              $resultado ^= (ord($payload[$offset]) << 8);
              for ($bitwise = 0; $bitwise < 8; $bitwise++) {
                  if (($resultado <<= 1) & 0x10000) $resultado ^= $polinomio;
                  $resultado &= 0xFFFF;
              }
          }
      }

    
      return self::ID_CRC16.'04'.strtoupper(dechex($resultado));
  }



}