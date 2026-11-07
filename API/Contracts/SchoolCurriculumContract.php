<?php

declare(strict_types=1);

namespace Plugins\SchoolCurriculum\API\Contracts;

/**
 * Published contract for `school.curriculum`.
 *
 * Curriculum programmes, phases, books and per-teacher plans, with auto-planning.
 *
 * Legacy source : _curriculum_common.php, teacher/curriculum*.php, admin_dash/js/views/curriculum.js (54 KB), tools/*curriculum*
 * Legacy tables : curriculum_books, curriculum_phases, teacher_curriculum_plans
 *
 * Consumers declare `"requires": ["school.curriculum"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolCurriculumContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
