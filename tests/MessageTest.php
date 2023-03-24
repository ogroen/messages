<?php

use PHPUnit\Framework\TestCase;

final class MessageTest extends TestCase
{
    public function testMessageSerialize(): void
    {
        $string = '{"class":"Ogroen\\\\Messages\\\\FranchiseNewRequest","fields":{"franchisePk":1,"name":"Alex","email":"alex@sample.com","phone":"+1999","text":""}}';

        $message = new \Ogroen\Messages\FranchiseNewRequest(1, 'Alex', 'alex@sample.com', '+1999', '');

        $this->assertSame($string, $message->serialize());
    }

    public function testMessageDeserialize(): void
    {
        $string = '{"class":"Ogroen\\\\Messages\\\\FranchiseNewRequest","fields":{"franchisePk":1,"name":"Alex","email":"alex@sample.com","phone":"+1999","text":""}}';

        /** @var \Ogroen\Messages\FranchiseNewRequest $message */
        $message = \Ogroen\Messages\Message::deserialize($string);

        $this->assertSame('Alex', $message->getName());
        $this->assertSame(1, $message->getFranchisePk());
        $this->assertSame('alex@sample.com', $message->getEmail());
        $this->assertSame('+1999', $message->getPhone());
        $this->assertSame('', $message->getText());
    }
}