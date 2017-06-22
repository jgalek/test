<?php
// ...
class PhotoRepository
{
// ...
    /**
     * Save record.
     *
     * @param array $photo Photo
     *
     * @return boolean Result
     */
    public function save($photo)
    {
        if (isset($photo['id']) && ctype_digit((string) $photo['id'])) {
            // update record
            $id = $photo['id'];
            unset($photo['id']);

            return $this->db->update('si_photos', $photo, ['id' => $id]);
        } else {
            // add new record
            return $this->db->insert('si_photos', $photo);
        }
    }
// ...
}