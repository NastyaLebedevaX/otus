<?php

function getBooks(): array
{
    $db = getDbConnection();

    $sql = "select
	b.title,
	b.page_number,
	b.publication_year,
	STRING_AGG(a.name, ', ') authors
from
	books b
inner join books_authors ba on
	ba.book_id = b.id
join authors a on
	a.id = ba.author_id
where (b.title ILIKE ? OR a.name ILIKE ?)
group by
	b.title,
	b.page_number,
	b.publication_year";

    $query = $db->prepare($sql);
    $searchParam = isset($_POST['search']) ? "%{$_POST['search']}%" : "%%";
    $query->execute([$searchParam, $searchParam]);
    return $query->fetchAll();
}