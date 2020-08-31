<?php

namespace DesignPatterns\More\Repository;

/**
 * 这个类位于实体层（Post 类）和访问对象层（内存）之间。
 *
 * 资源库封装了存储在数据存储中的对象集以及他们的操作执行
 * 为持久层提供更加面向对象的视图
 *
 * 在域和数据映射层之间，资源库还支持实现完全分离和单向依赖的目标。
 *
 */
class PostRepository
{
    /**
     * @var MemoryStorage
     */
    private $persistence;

    public function __construct(MemoryStorage $persistence)
    {
        $this->persistence = $persistence;
    }

    public function findById(int $id): Post
    {
        $arrayData = $this->persistence->retrieve($id);

        if (is_null($arrayData)) {
            throw new \InvalidArgumentException(sprintf('Post with ID %d does not exist', $id));
        }

        return Post::fromState($arrayData);
    }

    public function save(Post $post)
    {
        $id = $this->persistence->persist([
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ]);

        $post->setId($id);
    }
}