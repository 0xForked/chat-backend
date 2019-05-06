<?php



// save

// delete

// all

// find($id)

// findBy(String $field, $value)

// search()

// count

// protected function where(CoreModelContract $model, array $criteria = []): Builder
// {
//     foreach ($criteria as $expression) {
//         [$field, $operator, $value] = array_merge($expression, ['', '', '']);
//         if (strtoupper($operator) === 'IN') { // IN
//             $model = $model->whereIn($field, $value);
//         } elseif (strtoupper($operator) === 'NIN') { // NOT IN
//             $model = $model->whereNotIn($field, $value);
//         } elseif (strtoupper($operator) === 'ORIN') { // OR IN
//             $model = $model->orWhereIn($field, $value);
//         } elseif (strtoupper($operator) === 'ORNIN') { // OR NOT IN
//             $model = $model->orWhereNotIn($field, $value);
//         } else {
//             $model = $model->where($field, $operator, $value);
//         }
//     }
//     return $model;
// }