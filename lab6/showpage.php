<?php

function PokazPodstrone($pdo, $alias)
{
    $sql = "SELECT id, page_title, page_content
            FROM page_list
            WHERE alias = :alias AND status = 1
            LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['alias' => $alias]);

    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}