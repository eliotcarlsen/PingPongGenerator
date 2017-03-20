<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, "ping"], $result);
        }

        function test_generatePingInArrayFor3()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, "ping"], $result);
        }
        function test_generatePingInArray_for5()
        {
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 5;

          $result = $test_PingPongGenerator->generatePingPongArray($input);

          $this->assertEquals([1, 2, "ping", 4, 'pong'], $result);
        }
        function test_generatePingPongArray_for15()
        {
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 15;

          $result = $test_PingPongGenerator->generatePingPongArray($input);

          $this->assertEquals( 'ping-pong' , $result[14]);
        }
    }


?>
