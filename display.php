<?php

class Display
{

    public function showAll()
    {

        try {

            require "db.php";

            $stmt = $conn->prepare("select * from meals");

            $stmt->execute();

            $data = array();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            return $data;

        } catch (\Throwable $t) {
            echo "caught!\n";
            echo $t->getMessage(), " at ", $t->getFile(), ":", $t->getLine(), "\n";
        }

    }
}
