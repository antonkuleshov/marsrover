<?php

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
class MarsRover
{
    public function move(array $state, array $route): array
    {
        foreach ($route as $step) {
            $coordinateX = $state[0];
            $coordinateY = $state[1];
            $direction = $state[2];

            $newSide = $this->newSide($direction, $step);
            $stepValue = $this->getStepValue($step);

            if ($newSide === 'n') {
                $state = [$coordinateX, $coordinateY + $stepValue, $newSide];
            } elseif ($newSide === 's') {
                $state = [$coordinateX, $coordinateY - $stepValue, $newSide];
            } elseif ($newSide === 'w') {
                $state = [$coordinateX - $stepValue, $coordinateY, $newSide];
            } elseif ($newSide === 'e') {
                $state = [$coordinateX + $stepValue, $coordinateY, $newSide];
            }
        }
        return $state;
    }

    public function newSide(string $previousSide, int $walk)
    {
        if ($walk === 0 || $walk === 3) {
            return $previousSide;
        } elseif ($walk === 1 || $walk === 2) {
            return $this->checkSide($previousSide, $walk);
        }
    }

    public function checkSide(string $previousSide, int $walk)
    {
        $directionMap = [
            'n, 1' => 'e',
            'n, 2' => 'w',

            'e, 1' => 's',
            'e, 2' => 'n',

            's, 1' => 'w',
            's, 2' => 'e',

            'w, 1' => 'n',
            'w, 2' => 's',
        ];

        $stringDirection = $previousSide . ', ' . $walk;

        if (array_key_exists($stringDirection, $directionMap)) {
            return $directionMap[$stringDirection];
        }

    }

    public function getStepValue(int $walk)
    {
        if ($walk === 0) {
            return 1;
        } elseif ($walk === 3) {
            return -1;
        } elseif ($walk === 1 || $walk === 2) {
            return 1;
        }
    }
}