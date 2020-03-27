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
		$sql = "SELECT k.*, a.imie, a.nazwisko, k2.nazwa FROM ksiazki k JOIN autorzy as a ON k.id_autora = a.id JOIN kategorie k2 on k.id_kategorii = k2.id; ";

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
        $sql = "SELECT k.id, k.tytul, a.imie, a.nazwisko, k.opis, k.isbn, k.cena, k.liczba_stron, k.zdjecie FROM ksiazki k, autorzy a JOIN autorzy WHERE k.id_autora=a.id ORDER BY RAND() LIMIT 5";

        return $this->db->pobierzWszystko($sql);
        // uzupełnić funkcję
    }

}
