<?php

namespace App\BinaryTree\Backtracking;

class LetterCombinationsOfAPhoneNumber
{
    private const MAP = [
        '2' => ['a', 'b', 'c'],
        '3' => ['d', 'e', 'f'],
        '4' => ['g', 'h', 'i'],
        '5' => ['j', 'k', 'l'],
        '6' => ['m', 'n', 'o'],
        '7' => ['p', 'q', 'r', 's'],
        '8' => ['t', 'u', 'v'],
        '9' => ['w', 'x', 'y', 'z'],
    ];
    private array $result = [];
    private array $path = [];

    public function letterCombinations(string $digits): array
    {
        if (empty($digits)) {
            return [];
        }
        $this->backtracking($digits, 0);
        return $this->result;
    }

    private function backtracking(string &$digits, $index)
    {
        if ($index === strlen($digits)) {
            $this->result[] = implode('', $this->path);
            return;
        }
        $num = $digits[$index];
        $numMapChars = self::MAP[$num];
        for ($i = 0; $i < count($numMapChars); $i++) {
            $this->path[] = $numMapChars[$i];
            $this->backtracking($digits, $index + 1);
            array_pop($this->path);
        }
    }
}