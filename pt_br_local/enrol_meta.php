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
 * Strings for component 'enrol_meta', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_meta
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'coursesort' ]           = 'Ordenar lista de disciplinas';
$string[ 'coursesort_help' ]      = 'Isso determina se a lista de disciplinas que podem ser vinculadas são classificadas por ordem de classificação (ou seja, a ordem estabelecida no local de administração> Disciplinas> Gerenciar as disciplinas e cursos) ou em ordem alfabética por definição.';
$string[ 'coursesort_help' ]      = 'Isso determina se a lista de disciplinas que podem ser vinculadas são classificadas por ordem de classificação (ou seja, a ordem estabelecida no local de administração> Disciplinas> Gerenciar as disciplinas e cursos) ou em ordem alfabética por definição.';
$string[ 'defaultgroupnametext' ] = '{$a->name} disciplina {$a->increment}';
$string[ 'meta:selectaslinked' ]  = 'Selecionar disciplina como meta disciplina';
$string[ 'nosyncroleids_desc' ]   = 'Por padrão, todas as atribuições de papel em nível de disciplina são sincronizadas da disciplina-pai para a disciplina-filho. Papéis que são selecionados aqui não serão incluídos no processo de sincronização. Os papéis disponíveis para sincronização serão atualizados na próxima execução do cron.';
$string[ 'pluginname' ]           = 'Disciplina meta link';
$string[ 'pluginname_desc' ]      = 'O plugin de inscrição Disciplina meta link sincroniza inscrição e papéis em dois disciplinas diferentes.';
$string[ 'syncall_desc' ]         = 'Caso habilitado todos os usuários inscritos são sincronizados mesmo  se eles não tenham papéis na disciplina pai, caso desabilitado apenas usuários que tenham ao menos um papel sincronizado será inscrito na disciplina filho.';
