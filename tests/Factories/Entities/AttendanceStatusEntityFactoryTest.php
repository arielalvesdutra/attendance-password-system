<?php

namespace Tests\Factories\Entities;

use App\Entities\Status\CreatedStatus;
use App\Factories\Entities\AttendanceStatusEntityFactory;
use PHPUnit\Framework\TestCase;

class AttendanceStatusEntityFactoryTest extends TestCase
{
    protected function assertPreConditions(): void
    {
        $this->assertTrue(
            class_exists('App\Factories\Entities\AttendanceStatusEntityFactory'),
            "Classe App\Factories\Entities\AttendanceStatusEntityFactory não existe!"
        );
    }

    public function testCreate()
    {
        $id = 1;
        $name = "Senha Emitida";
        $code = "CREATED";

        $attendanceStatusEntity = AttendanceStatusEntityFactory::create(
            $name,
            $code,
            $id
        );

        $this->assertEquals(
            $id,
            $attendanceStatusEntity->getId()
        );

        $this->assertEquals(
          $name,
          $attendanceStatusEntity->getName()
        );

        $this->assertEquals(
            $name,
            $attendanceStatusEntity->getName()
        );

        $this->assertInstanceOf(
            CreatedStatus::class,
          $attendanceStatusEntity
        );
    }

    public function testCreateWithoutId()
    {

        $name = "Senha Emitida";
        $code = "CREATED";

        $attendanceStatusEntity = AttendanceStatusEntityFactory::create(
            $name,
            $code
        );

        $this->assertEquals(
            $name,
            $attendanceStatusEntity->getName()
        );

        $this->assertInstanceOf(
            CreatedStatus::class,
            $attendanceStatusEntity
        );
    }
}
