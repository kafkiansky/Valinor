<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Type\Parser\Lexer;

use CuyZ\Valinor\Type\Parser\Lexer\Token\Token;

interface TypeLexer
{
    public function tokenize(string $symbol): Token;
}
