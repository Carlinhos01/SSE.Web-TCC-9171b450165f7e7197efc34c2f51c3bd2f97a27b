<script>
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
        
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/10.12.2/firebase-app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/10.12.2/firebase-database.min.js"></script>

<div class="container-user">
    <div class="conteiner-user-unic">
        <div class="cont-add-user">
            <div class="pesquisa-user">
                <input type="text" id="searchInputUser" class="pess-input-user"
                    placeholder="Pesquisar Pessoa..." autocomplete="on">
                <button id="add-user-btn" class="btn-unic-pess">
                    <i class="fi fi-br-add"></i>
                </button>
            </div>
            <div id="add-user" class="add-user">
                <ul>
                    <!-- Os itens da lista serão adicionados aqui dinamicamente -->
                </ul>
            </div>
        </div>
    </div>

    <div class="conteiner-user-group">
        <div class="cont-add-group cont-add-user">
            <div class="pesquisa-group pesquisa-user">
                <input type="text" id="searchInputGroup" class="pess-input-group pess-input-user"
                    placeholder="Pesquisar Grupos..." autocomplete="on">
                <button class="btn-unic-group btn-unic-pess">
                    <i class="fi fi-br-add"></i>
                </button>
            </div>
            <div class="add-group"></div>
        </div>
        <div id="add-user" class="add-user">
            <ul>
                <!-- Os itens da lista serão adicionados aqui dinamicamente -->
            </ul>
        </div>
    </div>
</div>
    @yield('content')