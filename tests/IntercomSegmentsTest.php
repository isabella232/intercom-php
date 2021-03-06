<?php

namespace Intercom\Test;

use Intercom\IntercomSegments;

class IntercomSegmentsTest extends TestCase
{
    public function testSegmentList()
    {
        $this->client->method('get')->willReturn('foo');

        $segments = new IntercomSegments($this->client);
        $this->assertSame('foo', $segments->getSegments());
    }
}
