// IndexComponent.vue

<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Pessoas cadastradas</div>

              <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="pessoa in pessoas" :key="pessoa.id">
                            <td>{{ pessoa.nome }}</td>
                            <td>{{ pessoa.cpf }}</td>
                            <td>{{ pessoa.telefone }}</td>
                            <td><router-link :to="{name: 'edit', params: { id: pessoa.id }}" class="btn btn-primary">Editar</router-link></td>
                            <td><button class="btn btn-danger">Deletar</button></td>
                        </tr>
                    </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
  import axios from 'axios';
  export default {
      data() {
        return {
          pessoas: []
        }
      },
      created() {
      let uri = 'http://localhost:8000/pessoas';
      axios.get(uri).then(response => {
        this.pessoas = response.data.data;
      });
    },
    methods: {
      deletePost(id)
      {
        let uri = `http://localhost:8000/crud-access.test/api/pessoa/delete/${id}`;
        this.axios.delete(uri).then(response => {
          this.posts.splice(this.posts.indexOf(id), 1);
        });
      }
    }
  }
</script>
