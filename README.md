# hkm-plugin-school-curriculum

> Solves **`school.curriculum`** · namespace **`Plugins\SchoolCurriculum\`** · on-demand GDA module
> Family: Elimu / school domain

Curriculum programmes, phases, books and per-teacher plans, with auto-planning.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolCurriculumContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `_curriculum_common.php, teacher/curriculum*.php, admin_dash/js/views/curriculum.js (54 KB), tools/*curriculum*` |
| Legacy tables | `curriculum_books, curriculum_phases, teacher_curriculum_plans` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.classes`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.curriculum"] }
```

```php
$svc = $container->make(\Plugins\SchoolCurriculum\API\Contracts\SchoolCurriculumContract::class);
```

## Installing

```bash
hkm plugins enable SchoolCurriculum <project>
```
