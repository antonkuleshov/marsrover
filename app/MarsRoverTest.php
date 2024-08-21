<?php

class MarsRoverTest
{
    /*
     * 0 Straight ahead one step
     * 1 Right and make one step
     * 2 Left and make one step forward
     * 3 Back one step (without turning)
     * w - west
     * e - east
     * s - south
     * n - north
     *
     *         n
     *    w[2]---e[1]
     *         s
     * */
    public function testMarsRoverWork()
    {
        $state = [0, 0, 'n'];

        $marsRover = new MarsRover();

        $route1 = [0, 0, 0, 1, 1];
        $state1 = [1, 2, 's'];

        $newState = $marsRover->move($state, $route1);

        if ($newState !== $state1) {
            return false;
        }

        $route2 = [3, 3, 3, 3, 2, 2, 1];
        $state2 = [-2, -5, 'w'];

        $newState2 = $marsRover->move($state, $route2);

        if ($newState2 !== $state2) {
            return false;
        }

        $route3 = [0, 0, 2, 0, 0, 0, 1, 0, 0];
        $state3 = [-4, 5, 'n'];

        $newState3 = $marsRover->move($state, $route3);

        if ($newState3 !== $state3) {
            return false;
        }

        /*$routeRand = array_map(function () {
            return rand(0, 3);
        }, array_fill(0, 20, null));

        $newState4 = $marsRover->move($state, $routeRand);*/

        return true;
    }
}