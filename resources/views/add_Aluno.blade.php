@section('content')
<div id="addmodal" class="addmodal">
    <div class="addmodal-content">
        <span class="addmodal-close">&times;</span>
        <h2>Adicionar Usuário</h2>
        <div class="cont-card-user-add">
            
            <form id="add-user-form" action="#" method="post">
            <label for="" id="labelforaluhj">Aluno:</label>

                <!-- Nome -->
                <input type="text" name="nome_alu" id="add-user-name" placeholder="Nome do usuário" required>
                <!-- Email -->
                <input type="email" name="email" id="add-user-email" placeholder="E-mail do usuário" required>
                <!-- Telefone -->
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone do usuário" maxlength="11" required>
                <!-- Data de Nascimento -->
                <input type="text" id="add-user-dt_nasc" placeholder="Data de Aniversário" maxlength="11" required>
                <!-- Gênero -->
                <select name="genero" id="add-user-genero" required>
                    <option value="" disabled selected>Selecione o Gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                    <option value="Não quero declarar">Não quero declarar</option>
                </select>
                <!-- Curso/Série/Ensino -->
                <input type="text" name="curserens" id="cur-ser-ens" placeholder="Curso/Série/Ensino" required>
                <!-- Instituição -->
                <input type="text" name="instituicao" id="instituicao" placeholder="Instituição" required>
                <!-- CPF -->
                <input type="text" name="cpf" id="add-user-cpf" placeholder="CPF" required>
                <!-- RG -->
                <input type="text" name="rg" id="add-user-rg" placeholder="RG" required>
                <!-- PCD -->
                <select name="pcd" id="add-user-pcd" required>
                    <option value="" disabled selected>PCD</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
                <!-- Ícone -->
                <select name="icone" id="add-user-icon">
                    <option value="👤">👤</option>
                    <option value="👩">👩</option>
                    <option value="👨">👨</option>
                    <option value="👧">👧</option>
                    <option value="🧑">🧑</option>
                    <option value="🧒">🧒</option>
                    <option value="🧔">🧔</option>
                    <option value="👨‍🦱">👨‍🦱</option>
                    <option value="👱">👱</option>
                    <option value="👱‍♀️">👱‍♀️</option>
                </select>
                <!-- Tipo de Cartão -->
                <select name="op_card" id="op_card">
                    <option value="Aluno">Aluno</option>
                    <option value="Funcionário">Funcionário</option>
                </select>
                <label for="" id="labelforRsp">Responsável:</label>
                 Nome do Responsável 
                <input type="text" name="nomeResponsavel" id="NomeResponsavel" placeholder="Nome do Responsável" required>
                 Email do Responsável 
                <input type="email" name="emailResponsavel" id="EmailResponsavel" placeholder="Email do Responsável" required>
                 Telefone do Responsável 
                <input type="tel" name="telefoneResponsavel" id="TelefoneResponsavel" placeholder="Telefone do Responsável" maxlength="15" required>
                 RG do Responsável 
                <input type="text" name="RGResponsavel" id="RGResponsavel" placeholder="RG do Responsável" required>
                 CPF do Responsável 
                <input type="text" name="CPFResponsavel" id="CPFResponsavel" placeholder="CPF do Responsável" required>
            </div> 
               <button type="submit" class="btn-submit" id="add_aluno">Adicionar</button>
            </form>
       
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function(){

        //credenciais firebase 
        const firebaseConfig = {
    apiKey: "{{config('services.firebase.apiKey')}}",
    authDomain: "{{config('services.firebase.authDomain')}}",
    databaseURL: "{{config('services.firebase.databaseURL')}}",
    projectId: "{{config('services.firebase.projectId')}}",
    storageBucket: "{{config('services.firebase.storageBucket')}}",
    messagingSenderId: "{{config('services.firebase.messagingSenderId')}}",
    appId: "{{config('services.firebase.appId')}}",
    measurementId: "{{config('services.firebase.measurementId')}}"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

 //variavel publica
 var database = firebase.database();




        //criar função aluno
        $("#add_aluno").on('click', function(){
            var aluno = $('#add-user-form').serializeArray();
            var nome_Aluno = document.getElementById('add-user-name').value;
            var email_Aluno = document.getElementById('add-user-email').value;
            var tel_Aluno = document.getElementById('telefone').value;
            var data_nasc_Aluno = document.getElementById('add-user-dt_nasc').value;
            var genero_Aluno = document.getElementById('add-user-genero').value;
            var cur_Aluno = document.getElementById('cur-ser-ens').value;
            var instituicao = document.getElementById('instituicao').value;
            var cpf_Aluno = document.getElementById('add-user-cpf').value;
            var rg_Aluno = document.getElementById('add-user-rg').value;
            var pcd_Aluno = document.getElementById('add-user-pcd').value;
            var tipo_cartao_Aluno = document.getElementById('op_card').value;

            console.log(aluno)
            return false

            
            firebase.database().ref('Aluno/').set({
        rg: add-user-rg,
        cpf: add-user-cpf,
        nome_alu: add-user-name,
        dt_nascimento: add-user-dt_nasc,
        pcd: add-user-pcd,
        cur_ser_ens: cur-ser-ens,
        instituicao: instituicao,
        tel: telefone,
        email: add-user-email,
        tipo_cartao: op_card,
        genero: add-user-genero,
            })
        })


    })
</script>
@endpush