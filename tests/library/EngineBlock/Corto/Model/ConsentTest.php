<?php
/**
 * @todo, currently only arp is tested, test all other functionality too
 */
class EngineBlock_Corto_Model_ConsentTest extends PHPUnit_Framework_TestCase
{
    /** @var EngineBlock_Corto_Model_Consent */
    private $consent;

    public function setup()
    {
        EngineBlock_ApplicationSingleton::getInstance()->bootstrap();
        $diContainer = EngineBlock_ApplicationSingleton::getInstance()->getDiContainer();

        $this->consent = $this->factoryConsent($diContainer);
    }

    /**
     * Placeholder since no tests remained when arp was removed from consent model
     *
     * @todo write more tests
     */
    public function test()
    {
        return true;
    }

    /**
     * @param EngineBlock_Application_DiContainer $diContainer
     * @return EngineBlock_Corto_Model_Consent
     */
    private function factoryConsent(EngineBlock_Application_DiContainer $diContainer)
    {
        $tableName = null;
        $mustStoreValues = true;
        $response = array();
        $responseAttributes = array();

        $consent = new EngineBlock_Corto_Model_Consent(
            $tableName,
            $mustStoreValues,
            $response,
            $responseAttributes,
            $diContainer[EngineBlock_Application_DiContainer::DATABASE_CONNECTION_FACTORY]
        );

        return $consent;
    }
}
