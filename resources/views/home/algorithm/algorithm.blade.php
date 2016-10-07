@extends('templates.template2')


@section('title', 'Algoritmos')

@section('body')

    
    <div id="page-wrapper">

        <!-- Header -->
        @include('templates.nav2')

        <!-- Banner -->
        @include('templates.banner_welcome', [
            'title' => 'Algoritmos de busqueda', 
            'paragraph' => 'está diseñado para localizar un elemento con ciertas propiedades dentro de una estructura de datos', 
            'style' => 'display: inline', 
            'atitle' => 'siguiente'])

        <!-- One -->
        @include('templates.spotlight_bottom', [
            'title' => 'Algoritmo de busqueda',
            'paragraph' => '',
            'paragraph1' => 'Un algoritmo de búsqueda es aquel que está diseñado para localizar un elemento concreto dentro de una estructura de datos. Consiste en solucionar un problema de existencia o no de un elemento determinado en un conjunto finito de elementos, es decir, si el elemento en cuestión pertenece o no a dicho conjunto, además de su localización dentro de éste.
                Este problema puede reducirse a devolver la existencia de un número en un vector.',
            'paragraph2' => 'La búsqueda ciega o no informada sólo utiliza información acerca de si un estado es o no objetivo para guiar su procesu de búsqueda.
                Los métodos de búsqueda ciega se pueden clasificar en dos grupos básicos',
                'style' => 'display:inline',
                'atitle' => 'siguiente'


        ])

        <!-- Two -->
        @include('templates.spotlight_right', [
            'title' => 'Busqueda en anchura',
            'paragraph' => '',
            'paragraph1' => 'Son procedimientos de búsqueda nivel a nivel. Para cada uno de los nodos de un nivel se aplican todos los posibles operadores y no se expande ningún nodo de un nivel antes de haber expandido todos los del nivel anterior.',
            'listyle' => 'display:inline',
            'lititle' => 'MAS',
            'astyle' => 'display:inline',
            'atitle' => 'siguiente'
        ])   


        @include('templates.spotlight_left',[
            'title' => 'Busqueda en profundidad',
            'paragraph' => '',
            'paragraph1' => 'En estos procedimientos se realiza la búsqueda por una sola rama del árbol hasta encontrar una solución o hasta que se tome la decisión de terminar la búsqueda por esa dirección ( por no haber posibles operadores que aplicar sobre el nodo hoja o por haber alcanzado un nivel de profundidad muy grande ) . Si esto ocurre se produce una vuelta atrás ( backtracking ) y se sigue por otra rama hasta visitar todas las ramas del árbol si es necesario.',
            'listyle' => 'display:inline',
            'lititle' => 'MAS',
            'astyle' => 'display:inline',
            'atitle' => 'siguiente'
        ])

        <!-- Four -->
        @include('templates.wrapper_fade_up')

        <!-- Five -->
        @include('templates.wrapper_fade')

        <!-- Footer -->
        @include('templates.footer')

    </div>


    <!--
    <div class="container-fluid">
        <div class="panel panel-info">
        	<div class="panel-heading">
        	   <h3 class="panel-title">Busqueda en anchura o amplitud</h3>
        	</div>
        	<div class="panel-body">
                La búsqueda en anchura es otro procedimiento para visitar sistemáticamente todos los
                vértices de un grafo. Es adecuado especialmente para resolver problemas de
                optimización, en los que se deba elegir la mejor solución entre varias posibles. Al igual
                que en la búsqueda en profundidad se comienza en un vértice v (la raíz) que es el primer
                vértice activo. En el siguiente paso se etiquetan como visitados todos los vecinos del
                vértice activo que no han sido etiquetados. Se continúa etiquetando todos los vecinos de
                los hijos de v (que no hayan sido visitados aún). En este proceso nunca se visita un
                vértice dos veces por lo que se construye un grafo sin ciclos, que será un árbol
                generador de la componente conexa que contiene a v. 
                <p>
                </p>
                <h3 class="panel-title">Ventajas</h3>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th scope="row">-</th>
                            <td class="list-group-item">No se “pierde”, explorando caminos infructuosos que consumen mucho tiempo sin llegar solución o de los que no se vuelve nunca (bucles en profundidad)</td>
                        </tr>
                        <tr>
                            <th scope="row">-</th>
                            <td class="list-group-item">Si hay una solución la encuentra. Es mas si hay varias encuentra la optima.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <h3 class="panel-title">Algoritmo</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Paso</th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                        <tr>
                            <th scope="row">1</th>
                            <td class="list-group-item">Designamos a v como vértice activo y como raíz del árbol generador T que se
                            construirá. Se le asigna a v la etiqueta 0.</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="list-group-item">Sea i=0 y S={v}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="list-group-item">Hallar el conjunto M de todos los vértices no etiquetados que son adyacentes a algún vértice de S</td>
                        </tr>   
                        <tr>
                            <th scope="row">4</th>
                            <td class="list-group-item">Si M es vacío el algoritmo termina. En caso contrario, se etiquetan todos los vértices de M con i+1, se añaden a T las aristas entre cada vértice de S y su vecino en M y se
                            hace S=M.</td>
                        </tr>   
                        <tr>
                            <th scope="row">5</th>
                            <td class="list-group-item">i=i+1 y volver al paso 3. </td>
                        </tr>               
                    </table>
                </div>
                <p>
                    Al terminar el proceso se habrá construido un árbol generador del grafo inicial. En caso
                    de G no ser conexo, habría que modificar el algoritmo para encontrar un árbol
                    generador de cada componente conexa de G. La complejidad de este algoritmo es
                    O(max{n, m}).
                </p>
        	</div>
        	    
        </div>
        <p></p>
        <div class="panel panel-info">
        	<div class="panel-heading">
        	        <h3 class="panel-title">Busqueda en profundidad</h3>
        	</div>
        	<div class="panel-body">
                Muchos algoritmos de grafos necesitan visitar de un modo sistemático todos los vértices
        		de un grafo. En la búsqueda en profundidad se avanza de vértice en vértice, marcando
        		cada vértice visitado. La búsqueda siempre avanza hacia un vértice no marcado,
        		internándose “profundamente” en el grafo sin repetir ningún vértice. Cuando se alcanza
        		un vértice cuyos vecinos han sido marcados, se retrocede al anterior vértice visitado y
        		se avanza desde éste.
        		Si dado un grafo simple G, escogemos un vértice v para iniciar la exploración del grafo
        		utilizando la búsqueda en profundidad, el árbol que se construye es un árbol generador
        		de la componente conexa del grafo que contiene a v
                <p>
                </p>
                <h3 class="panel-title">Ventajas</h3>
                <table class="table table-condensed">
                    <tr>
                        <th scope="row">-</th>
                        <td class="list-group-item">Requiere mucho menos memoria ( solo hay que guardar el camino actual).</td>
                    </tr>
                    <tr>
                        <th scope="row">-</th>
                        <td class="list-group-item">Puede encontrar el árbol sobre todo si hay varios caminos a la solución.</td>
                    </tr>          
                </table>
            </div>
            <div class="panel-footer">
                <h3 class="panel-title">Algoritmo</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Paso</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="row">1</th>
                        <td class="list-group-item">Se comienza en un vértice v (vértice activo) y se toma como la raíz del árbol generador T que se construirá. Se marca el vértice v
        				</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="list-group-item">Se elige un vértice u, no marcado, entre los vecinos del vértice activo. Si no existe tal vértice, ir a 4. 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="list-group-item">Se añade la arista (v, u) al árbol T. Se marca el vértice u y se toma como activo. Ir al paso 2
        				</td>
                    </tr>   
                    <tr>
                        <th scope="row">4</th>
                        <td class="list-group-item">Si se han alcanzado todos los vértices de G el algoritmo termina. En caso contrario,
        					se toma el vértice padre del vértice activo como nuevo vértice activo y se vuelve al paso 2.
        				</td>
                    </tr>             
                </table>
                <p>
                    La complejidad de este algoritmo es O(max{n, m})
                </p>
            </div>    
        </div>
    </div>
    -->
@endsection