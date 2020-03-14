<?php

namespace Ibd;

class Ksiazki
{
	/**
	 * Instancja klasy obsługującej połączenie do bazy.
	 *
	 * @var Db
	 */
	private $db;

	public function __construct()
    {
        $this->db = new Db();
	}

	/**
	 * Pobiera wszystkie książki.
	 *
	 * @return array
	 */
	public function pobierzWszystkie()
	{
		$sql = "SELECT k.*, a.*, k2.* FROM ksiazki k JOIN autorzy as a ON k.id_autora = a.id JOIN kategorie k2 on k.id_kategorii = k2.id; ";

		return $this->db->pobierzWszystko($sql);
	}

	/**
	 * Pobiera dane książki o podanym id.
	 * 
	 * @param int $id
	 * @return array
	 */
	public function pobierz($id)
	{
		return $this->db->pobierz('ksiazki', $id);
	}

	/**
	 * Pobiera najlepiej sprzedające się książki.
	 * 
	 */
	public function pobierzBestsellery()
	{
		$sql = "SELECT * FROM ksiazki ORDER BY RAND() LIMIT 5";

		// uzupełnić funkcję
	}

}
