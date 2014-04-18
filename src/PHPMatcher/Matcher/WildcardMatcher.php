<?php

namespace PHPMatcher\Matcher;

class WildcardMatcher implements PropertyMatcher
{
    const MATCH_PATTERN = "/^@(\*|wildcard)@$/";

    /**
     * {@inheritDoc}
     */
    public function match($matcher, $pattern)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function canMatch($pattern)
    {
        return is_string($pattern) && 0 !== preg_match(self::MATCH_PATTERN, $pattern);
    }

}
