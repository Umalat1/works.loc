<?php

    class User
    {
        private $db, $data;

        public function __construct()
        {
            $this->db = Database::getInstance();
        }

        public function create($fields = [])
        {
            $this->db->insert('users', $fields);

        }

        public  function login($email = null, $password = null) {
            $user = $this->find($email);

            if ($user) {
                if (password_verify($password, $this->data()->passwerd)) {
                    Session::put('user', $this->data()->id);
                    return true;
                }
            }
            return false;
        }

        public function find($email = null) {
            if ($email) {
                $this->data = $this->db->get('users', ['email', '=', $email])->first();
                return true;
            }
            return false;
        }

        public function data() {
            return $this->data;
        }
    }