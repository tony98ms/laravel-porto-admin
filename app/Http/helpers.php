<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

/**
 * Cambiar Formato Fechas
 *
 * @param mixed $date
 * @param mixed $date_format
 * @return string
 */
if (!function_exists('changeDateFormate')) {
    function changeDateFormate($date, $date_format)
    {
        return Carbon::parse($date)->format($date_format);
    }
}
/**
 * Obtener Primer Dia Mes
 *
 * @param string $format
 * @return string
 */

if (!function_exists('starMonth')) {
    function starMonth($format = 'Y-m-d')
    {
        $s = Carbon::now()->startOfMonth();

        return $s->format($format);
    }
}


if (!function_exists('finalMes')) {
    function finalMes($format = 'Y-m-d')
    {
        $s = Carbon::now()->endOfMonth();

        return $s->format($format);
    }
}

/**
 * Obtener Fecha Formteada
 *
 * @param string $format
 * @return string
 */

if (!function_exists('fechaFormat')) {
    function fechaFormat($date)
    {

        return Carbon::parse($date)->formatLocalized('%d de %B %Y ');
    }
}
if (!function_exists('unMesAtras')) {
    function unMesAtras()
    {
        $fecha = Carbon::parse(now());
        return $fecha->subDays(30)->isoFormat('YYYY-MM-DD');
    }
}
if (!function_exists('fechaHoy')) {
    function fechaHoy()
    {
        return Carbon::now()->isoFormat('YYYY-MM-DD');
    }
}
if (!function_exists('navActive')) {
    /**
     * Funcion para activar la pestaña que coincide con la ruta actual
     * en el Sidebar
     *
     * @param string $url
     * @return string
     */
    function navActive(string $url)
    {
        return  Request::is($url) ? ' nav-active ' : '';
    }
}
if (!function_exists('navExpanded ')) {
    /**
     * Funcion para expandir la pestaña que coincide con la ruta actual
     * en el Sidebar
     *
     * @param string $url
     * @return string
     */
    function navExpanded(array $urls)
    {
        foreach ($urls as $key => $ruta) {
            if (Request::is($ruta->url)) {
                $string = ' nav-expanded ';
            }
            if (!empty($string)) {
                return $string;
            }
            if (isset($ruta->submenu)) {
                $string = navExpanded($ruta->submenu);
                if (!empty($string)) {
                    return $string;
                }
            }
        }
    }
}
if (!function_exists('activeAll')) {
    /**
     * Funcion que verifica si algun elemento de la lista coincide
     * con la ruta actual, y procede a activarla pada su visualizacion
     *
     * @param array $rutas
     * @return string
     */
    function activeAll(array $rutas)
    {
        foreach ($rutas as $key => $ruta) {
            $string = navActive($ruta->url);
            if (!empty($string)) {
                return $string;
            }
            if (isset($ruta->submenu)) {
                $string = activeAll($ruta->submenu);
                if (!empty($string)) {
                    return $string;
                }
            }
        }
    }
}
if (!function_exists('hasParent')) {
    /**
     * Funcion que verifica si un elemento del sidebar tiene subelementos y
     * genera un indicador para expandir el elemento.
     *
     * @param integer $count
     * @return boolean
     */
    function hasParent(int $count)
    {
        return  $count > 0 ? ' nav-parent ' : '';
    }
}

if (!function_exists('hasParentSubmenu')) {
    /**
     * Funcion que verifica si un elemento del sidebar tiene subelementos y
     * genera un indicador para expandir el elemento.
     *
     * @param integer $count
     * @return boolean
     */
    function hasParentSubmenu($menu)
    {
        return isset($menu->submenu) && count($menu->submenu) > 0 ? ' nav-parent ' : '';
    }
}
if (!function_exists('hasSubmenu')) {
    /**
     * Funcion que verifica si un elemento del sidebar tiene subelementos
     *
     * @param integer $count
     * @return boolean
     */
    function hasSubmenu(int $count)
    {
        return  $count > 0 ? true : false;
    }
}
