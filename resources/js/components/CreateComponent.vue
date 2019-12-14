// CreatePost.vue

<template>
  <div>
    <h4>Cadastre um novo usuário</h4>
    <form @submit.prevent="addPost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome"/>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="nascimento">Nascimento</label>
                <input type="date" class="form-control" name="nascimento" id="nascimento"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" name="uf" id="uf"/>
            </div>
          </div>
        </div><br/>
        <div class="form-group">
          <button class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {
        data(){
        return {
          post:{}
        }
    },
    methods: {
      addPost(){
        console.log(this.post);
      }
    }
  }
</script>
