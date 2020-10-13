<?php

class NFe_NaturalPersonTest extends NFe_TestCase {
//  private static $company_id = '5f74fd838e9d0929c843416e';
  private $company_id = COMPANY_ID;

  public function testFetchPerson() {
    $result = NFe_NaturalPerson::fetch( self::$company_id, '5581c760146dc70d384da4b5' );
    $this->assertNotNull($result);
  }

  public function testFetchFail() {
    $this->expectException('NFeObjectNotFound');
    $result = NFe_NaturalPerson::fetch( self::$company_id, self::$company_id );
    $this->assertNull($result);
  }

  public function testSearch() {
    $persons = NFe_NaturalPerson::search( self::$company_id );
    $this->assertTrue( count( $persons ) >= 1 );
  }
}

