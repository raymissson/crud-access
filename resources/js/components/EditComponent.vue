// EditComponent.vue

<template>
  <div>
    <h4>Editar pessoa</h4>
    <form @submit.prevent="addPessoa">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" v-model="pessoa.nome" name="nome" id="nome"/>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" v-model="pessoa.cpf" name="cpf" id="cpf"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="nascimento">Nascimento</label>
                <input type="date" class="form-control" v-model="pessoa.nascimento" name="nascimento" id="nascimento"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" v-model="pessoa.email" name="email" id="email"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" v-model="pessoa.telefone" name="telefone" id="telefone"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" v-model="pessoa.cep" name="cep" id="cep"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" v-model="pessoa.endereco" name="endereco" id="endereco"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" v-model="pessoa.bairro" name="bairro" id="bairro"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" v-model="pessoa.cidade" name="cidade" id="cidade"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" v-model="uf" name="uf" id="uf"/>
            </div>
          </div>
        </div><br/>
        <div class="form-group">
          <button class="btn btn-primary">Atualizar</button>
        </div>
    </form>
  </div>
</template>
<script>
    export default {

      data() {
        return {
          pessoa: {}
        }
      },
      created() {
        let uri = `http://crud-access.test/api/pessoa/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.pessoa = response.data;
        });
      },
      methods: {
        updatePost() {
          let uri = `http://crud-access.test/api/pessoa/update/${this.$route.params.id}`;
          this.axios.pessoa(uri, this.pessoa).then((response) => {
            this.$router.push({name: 'pessoas'});
          });
        }
      }
    }
</script>
