<?php
  class ContactsTest extends PHPUnit_Framework_TestCase
  {
    public function testListContacts()
    {
        $mj = new Mailjet("API_KEY", "API_SECRET_KEY");
        
        $return = $mj->contact();
        
        $this->assertEquals(http_response_code(), $return);
    }
    
    public function testCreateContact()
    {
        $mj = new Mailjet("API_KEY", "API_SECRET_KEY");
        
        $params = array(
          "method" => "POST"
        );
        $return = $mj->contact($params);
        
        $this->assertEquals(http_response_code(), $return);
    }
  }
?>
