    <hr>
    <h1 style="color: red;">FOOTER</h1>
    <?php 
        // $this->session->unset_userdata('name');
        $this->session->sess_destroy();
        echo $this->session->userdata('name').'<br />';
        echo $this->session->userdata('email').'<br />';
        echo $this->session->userdata('phone').'<br />';
        echo $this->session->userdata('address');
    ?>
</body>
</html>