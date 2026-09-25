<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        $title = "Montaña Roja | Camping, Restaurante & Bar en Tehuacán-Cuicatlán";
        $meta_description = "Desconéctate de la rutina y reconecta con la tierra y los sabores en Montaña Roja. Descubre nuestro camping y restaurante a la leña en la Reserva de la Biósfera Tehuacán-Cuicatlán.";
        return view('pages.inicio', compact('title', 'meta_description'));
    }

    public function sobreNosotros()
    {
        $title = "Sobre Nosotros | Montaña Roja";
        $meta_description = "Conoce la historia detrás de Montaña Roja, nuestra cocina de autor por el Chef Christian y nuestro propósito de reconectar con la naturaleza.";
        return view('pages.sobre-nosotros', compact('title', 'meta_description'));
    }

    public function camping()
    {
        $title = "Camping | Montaña Roja";
        $meta_description = "Acampa bajo las estrellas junto al río en Montaña Roja. Conoce nuestras tarifas, amenidades y servicios para una experiencia única.";
        return view('pages.camping', compact('title', 'meta_description'));
    }

    public function restaurante()
    {
        $title = "Restaurante y Bar | Montaña Roja";
        $meta_description = "Disfruta de nuestra cocina a la leña de autor, con ingredientes de temporada y un ambiente inigualable en Montaña Roja.";
        return view('pages.restaurante', compact('title', 'meta_description'));
    }

    public function eventos()
    {
        $title = "Actividades | Montaña Roja";
        $meta_description = "Noches estrelladas, senderismo y fogata. Conoce las actividades que puedes disfrutar en la naturaleza de Montaña Roja.";
        return view('pages.eventos', compact('title', 'meta_description'));
    }

    public function ubicacion()
    {
        $title = "Ubicación | Montaña Roja";
        $meta_description = "Encuéntranos en el Km 126. Planea tu viaje a Montaña Roja y descubre cómo llegar a nuestro oasis en Oaxaca.";
        return view('pages.ubicacion', compact('title', 'meta_description'));
    }
}
