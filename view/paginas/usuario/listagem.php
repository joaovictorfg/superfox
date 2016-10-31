<?php
/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 27/10/2016
 * Time: 17:09
 */
?>
<h4>Listar por:</h4>
<article>
    <section>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s8">
                        <input id="login" type="text" class="validate">
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="id" type="text" class="validate">
                        <label for="id">ID</label>
                    </div>
                </div>
                <div class="row">
                    <a class="waves-effect orange darken-3 waves-light btn">Pesquisar</a>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="responsive-table">
                <thead>
                <tr>
                    <th data-field="id">Nome</th>
                    <th data-field="name">Login</th>
                    <th data-field="email">Email</th>
                    <th data-field="ver" width="18">Ver</th>
                    <th data-field="editar" width="18">Editar</th>
                    <th data-field="excluir" width="18">Excluir</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td><a class="waves-effect orange darken-3  waves-light btn"><i class="material-icons center">remove_red_eye</i></a></td>
                    <td><a class="waves-effect blue darken-3  waves-light btn"><i class="material-icons center">create</i></a></td>
                    <td><a class="waves-effect red darken-3  waves-light btn"><i class="material-icons center">delete</i></a></td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                    <td><a class="waves-effect orange darken-3  waves-light btn"><i class="material-icons center">remove_red_eye</i></a></td>
                    <td><a class="waves-effect blue darken-3  waves-light btn"><i class="material-icons center">create</i></a></td>
                    <td><a class="waves-effect red darken-3  waves-light btn"><i class="material-icons center">delete</i></a></td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                    <td><a class="waves-effect orange darken-3  waves-light btn"><i class="material-icons center">remove_red_eye</i></a></td>
                    <td><a class="waves-effect blue darken-3  waves-light btn"><i class="material-icons center">create</i></a></td>
                    <td><a class="waves-effect red darken-3  waves-light btn"><i class="material-icons center">delete</i></a></td>
                </tr>


                </tbody>
            </table>
        </div>
    </section>
</article>