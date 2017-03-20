<?php

namespace Tasksuki\Component\Serializer;

use Tasksuki\Component\Message\Message;
use Tasksuki\Component\Serializer\Exception\SerializerException;

/**
 * Interface SerializerInterface
 *
 * @package Tasksuki\Component\Serializer
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface SerializerInterface
{
    /**
     * @param Message $message
     *
     * @return string
     */
    public function serialize(Message $message): string;

    /**
     * @param string $data
     *
     * @return Message
     *
     * @throws SerializerException
     */
    public function unserialize(string $data): Message;
}