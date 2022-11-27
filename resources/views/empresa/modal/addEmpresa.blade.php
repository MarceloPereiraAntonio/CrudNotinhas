<form action="{{ route('empresa.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-xl" id="add"  data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Informações da Empresa</b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-container">
                    @if ($errors->any())
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#add').modal('show');
                        })
                    </script>
                        <div class="alert alert-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                            </svg>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="cnpj" class="form-label"><b>CNPJ</b></label>
                                <input class="form-control" type="text" name="cnpj" value="{{ old('cnpj') }}">
                            </div>
                            <div class="col-md-3 ms-auto">
                                <label for="razaoSocial" class="form-label"><b>Razão Social</b></label>
                                <input class="form-control" type="text" name="razaoSocial"
                                    value="{{ old('razaoSocial') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="nomeFantasia" class="form-label"><b>Nome Fantasia</b></label>
                                <input class="form-control" type="text" name="nomeFantasia"
                                    value="{{ old('nomeFantasia') }}">
                            </div>
                            <div class="col-md-2">
                                <label for="im" class="form-label"><b>Inscrição Municipal</b></label>
                                <input class="form-control" type="text" name="im" value="{{ old('im') }}">
                            </div>
                            <div class="col-md-2">
                                <label for="ie" class="form-label"><b>Inscrição Estadual</b></label>
                                <input class="form-control" type="text" name="ie" value="{{ old('ie') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="cep" class="form-label"><b>CEP</b></label>
                                <input class="form-control" type="text" name="cep" id="cep">
                            </div>
                            <div class="col-md-4">
                                <label for="rua" class="form-label"><b>Rua</b></label>
                                <input class="form-control" type="text" name="rua" id="rua">
                            </div>
                            <div class="col-md-1">
                                <label for="numero" class="form-label"><b>Número</b></label>
                                <input class="form-control" type="text" name="numero">
                            </div>
                            <div class="col-md-4">
                                <label for="bairro" class="form-label"><b>Bairro</b></label>
                                <input class="form-control" type="text" name="bairro" id="bairro">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="complemento" class="form-label"><b>Complemento</b></label>
                                <input class="form-control" type="text" name="complemento" id="complemento"
                                    value="{{ old('complemento') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="cidade" class="form-label"><b>Cidade</b></label>
                                <input class="form-control" type="text" name="cidade" id="cidade">
                            </div>
                            <div class="col-md-1">
                                <label for="estado" class="form-label"><b>Estado</b></label>
                                <select class="form-select" name="estado" aria-label="Estado" id="estado">
                                    <option selected>Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="tel" class="form-label"><b>Telefone</b></label>
                                <input class="form-control" type="tel" name="tel" value="11981847049">
                            </div>
                            <div class="col-md-3">
                                <label for="email" class="form-label"><b>E-mail</b></label>
                                <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="optanteSn" class="form-label"><b>Optante Simples Nacional ?</b></label>
                                <select class="form-select" name="optanteSn" aria-label="optanteSn">
                                    <option value="true">Sim</option>
                                    <option value="false">Não</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="incentivadorCultural" class="form-label"><b>Incentivador Cultural
                                        ?</b></label>
                                <select class="form-select" name="incentivadorCultural"
                                    aria-label="incentivadorCultural">
                                    <option value="true">Sim</option>
                                    <option value="false" selected>Não</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="tipoEmissao" class="form-label"><b>Tipo de emissão</b></label>
                                <select class="form-select" name="tipoEmissao" aria-label="tipoEmissao">
                                    <option value=1>NFS-e</option>
                                    <option value=2>Danfe</option>
                                    <option value=3>NFS-e e Danfe</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="ambiente" class="form-label"><b>Ambiente</b></label>
                                <select class="form-select" name="ambiente" aria-label="ambiente">
                                    <option value=1>Produção</option>
                                    <option value=2>Homologação</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="status" class="form-label"><b>Status</b></label>
                                <select class="form-select" name="status" aria-label="status">
                                    <option value=1>Ativo</option>
                                    <option value=2>Pendente</option>
                                    <option value=3>Inativo</option>
                                    <option value=4>Pagamento em atraso</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="clienteMjp" class="form-label"><b>Cliente MJP ?</b></label>
                                <select class="form-select" name="clienteMjp" aria-label="clienteMjp">
                                    <option value="true">Sim</option>
                                    <option value="false">Não</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="frequenciaRelatorio" class="form-label"><b>Frequencia de envio</b></label>
                                <select class="form-select" name="frequenciaRelatorio"
                                    aria-label="frequenciaRelatorio">
                                    <option value=1>Mensal</option>
                                    <option value=2>Quinsenal</option>
                                    <option value=3>Anual</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="emailRelatorio" class="form-label"><b>E-mail(s) para receber
                                        relatórios</b></label>
                                <input class="form-control" type="email" name="emailRelatorio">
                            </div>
                            <div class="col-md-3">
                                <label for="garantia" class="form-label"><b>Garantia</b></label>
                                <select class="form-select" name="garantia" aria-label="garantia">
                                    <option value=0>Sem garantia</option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                                    <option value=6>6</option>
                                    <option value=7>7</option>
                                    <option value=8>8</option>
                                    <option value=9>9</option>
                                    <option value=10>10</option>
                                    <option value=11>11</option>
                                    <option value=12>12</option>
                                    <option value=13>13</option>
                                    <option value=14>14</option>
                                    <option value=15>15</option>
                                    <option value=16>16</option>
                                    <option value=17>17</option>
                                    <option value=18>18</option>
                                    <option value=19>19</option>
                                    <option value=20>20</option>
                                    <option value=21>21</option>
                                    <option value=22>22</option>
                                    <option value=23>23</option>
                                    <option value=24>24</option>
                                    <option value=25>25</option>
                                    <option value=26>26</option>
                                    <option value=27>27</option>
                                    <option value=28>28</option>
                                    <option value=29>29</option>
                                    <option value=30>30</option>
                                </select>


                            </div>
                            <div class="col-md-3">
                                <label for="enviaNota" class="form-label"><b>Enviar NF para o cliente ?</b></label>
                                <select class="form-select" name="enviaNota" aria-label="enviaNota">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="plataformaEmissao" class="form-label"><b>Plataforma de emissão</b></label>
                                <select class="form-select" name="plataformaEmissao" aria-label="enviaNota">
                                    <option value="E">Enotas</option>
                                    <option value="P">PlugNotas</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="retornoEnotas" class="form-label"><b>Nota sobre a
                                        empresa(interno)</b></label>
                                <textarea class="form-control" name="retornoEnotas" id="retornoEnotas" rows="3" style="height: 60px">{{ old('retornoEnotas') }}</textarea>
                                <small>Máx.240 caracteres</small>
                            </div>
                            <h4>Dados municipais</h4>
                            <hr class="border border-primary border-2 opacity-35">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
