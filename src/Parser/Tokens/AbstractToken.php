<?php

namespace PhpUML\Parser\Tokens;

abstract class AbstractToken
{
    /** @var int  */
    protected $id;
    /** @var array  */
    protected $tokens;

    public function __construct(int $id, array $tokens)
    {
        $this->id = $id;
        $this->tokens = $tokens;
    }
}
