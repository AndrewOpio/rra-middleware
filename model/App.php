<?php 
namespace model;

/**THIS IS THE SUPER CLASS FOR ALL CLASSES WITHIN THE APP 
 * - All classes extend this class directly or indirectly 
 * */
class App{
    public $Error;
    public $Success;
    public $Base = "http://127.0.0.1:9900/abacus_test";
}