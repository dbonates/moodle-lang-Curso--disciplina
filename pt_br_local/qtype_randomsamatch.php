<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_randomsamatch', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'nosaincategory' ]        = 'Não existe nenhuma questão com resposta breve disponível no curso escolhida \'{$a->catname}\'. Escolha um curso diferente ou crie algumas questões neste curso.';
$string[ 'notenoughsaincategory' ] = 'Existem apenas {$a->nosaquestions} questões com resposta breve no curso escolhida \'{$a->catname}\'. Escolha outro curso, adicione questões a este curso ou reduza o número de questões configuradas.';
$string[ 'pluginname_help' ]       = 'Da perspectiva do aluno, esta questão parece uma questão associativa. A diferença é que a lista de nomes ou afirmações (perguntas) para associação são desenhadas de forma randômica a partir do curso de questões da resposta curta. É preciso que haja um número suficiente de questões de resposta curta não utilizadas, caso contrário uma mensagem de erro será exibida.';
$string[ 'pluginnamesummary' ]     = 'Como a questão associativa, mas criada randomicamente a partir da s questões de resposta curta em um curso particular.';
$string[ 'subcats' ]               = 'Incluir subcursos';
$string[ 'subcats_help' ]          = 'Se marcada, as perguntas serão também escolhidas a partir de subcursos.';
