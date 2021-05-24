<?php
/**
 * Behavioural Patterns: Mediator
 * AdminUser class
 *
 * Посредник - управляющий пользователями чата
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Mediator;
use DesignPatterns\Behavioural\Mediator\Mediator;
use DesignPatterns\Behavioural\Mediator\User;

class ChatMediator implements Mediator
{
    // В свойствах посредника должен быть администратор
    // и группа обычных пользователей
    private $admin;
    private $regularUsers = [];

    // В конструкторе обязательно определяем администратора чата,
    // записываем ссылку на него в свойство и назначем ему объект
    // посредника. Чат может быть и без обычных пользователей, но 
    // админ быть обязан!
    public function __construct(AdminUser $admin, RegularUser $regularUser = null)
    {
        $this->admin = $admin;
        $this->admin->setMediator($this);

        if ($regularUser != null) {
            $this->regularUsers[$regularUser->getName()] = $regularUser;
            $this->regularUsers[$regularUser->getName()]->setMediator($this);
        } 
    }

    // Отправка сообщений: в зависимости от того кто отправляет,
    // администратор будет снабжать сообщение ехидными комментариями
    public function sendMessage(User $user, string $message): void
    {
        if ($user instanceof AdminUser) {
            echo $user->getName()." says: ".$message."<br>";
        }
        if ($user instanceof RegularUser) {
            echo $this->admin->getName()." yells: BEWARE PLEB SPEAKS!:<br>";
            echo $user->getName()." says: ".$message."<br>";
        }
    }

    // Добавление обычного пользователя так же вызывает 
    // токсичность админа. Второго админа чат вообще не пропустит :)
    public function addUser(User $user): void
    {
        if ($user instanceof AdminUser) {
            echo "Impossible! Must be the only ADMIN!<br>";
        } else if ($user instanceof RegularUser) {
            echo $this->admin->getName()." yells: HEEEEY ONE MORE PLEB IN DA 4AT!:<br>";
            $this->regularUsers[$user->getName()] = $user;
            $this->regularUsers[$user->getName()]->setMediator($this);
        }
    }

    // Выводим список юзеров
    public function showUsers(): void
    {
        echo "Regular Users:<br>";
        foreach ($this->regularUsers as $user) {
            echo $user->getName()." <br>";
        }
        echo "Admin: ".$this->admin->getName();
    }
}