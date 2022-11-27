<form action="{{route('empresa.update', $empresas[$i]['id'])}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    {{-- <div class="modal fade bd-example-modal-xl" id="ModalEdit{{ $empresas[$i]['id'] }}"  tabindex="-1" role="dialog" aria-hidden="true"> --}}
    <div class="modal fade" id="ModalEdit{{ $empresas[$i]['id'] }}" tabindex="-1" aria-labelledby="ModalEdit" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="ModalEdit"><b>Informações da Empresa {{ $empresas[$i]['id'] }}</b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"  id="modal-container">
                    {{-- --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="cnpj" class="form-label"><b>CNPJ</b></label>
                                <input class="form-control" type="text" name="cnpj" value="{{$empresas[$i]['cnpj']}}">
                            </div>
                            <div class="col-md-3 ms-auto">
                                <label for="razaoSocial" class="form-label"><b>Razão Social</b></label>
                                <input class="form-control" type="text" name="razaoSocial" value="{{$empresas[$i]['razaoSocial']}}">
                            </div>
                            <div class="col-md-3">
                                <label for="nomeFantasia" class="form-label"><b>Nome Fantasia</b></label>
                                <input class="form-control" type="text" name="nomeFantasia" value="{{$empresas[$i]['nomeFantasia']}}">
                            </div>
                            <div class="col-md-2">
                                <label for="im" class="form-label"><b>Inscrição Municipal</b></label>
                                <input class="form-control" type="text" name="im" value="{{$empresas[$i]['im']}}">
                            </div>
                            <div class="col-md-2">
                                <label for="ie" class="form-label"><b>Inscrição Estadual</b></label>
                                <input class="form-control" type="text" name="ie" value="{{$empresas[$i]['ie']}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="cep" class="form-label"><b>CEP</b></label>
                                <input class="form-control" type="text" name="cep" value="{{$empresas[$i]['cep']}}">
                            </div>
                            <div class="col-md-4">
                                <label for="rua" class="form-label"><b>Rua</b></label>
                                <input class="form-control" type="text" name="rua" value="{{$empresas[$i]['rua']}}">
                            </div>
                            <div class="col-md-1">
                                <label for="numero" class="form-label"><b>Número</b></label>
                                <input class="form-control" type="text" name="numero" value="{{$empresas[$i]['numero']}}">
                            </div>
                            <div class="col-md-4">
                                <label for="bairro" class="form-label"><b>Bairro</b></label>
                                <input class="form-control" type="text" name="bairro" value="{{$empresas[$i]['bairro']}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="complemento" class="form-label"><b>Complemento</b></label>
                                <input class="form-control" type="text" name="complemento" value="{{$empresas[$i]['complemento']}}">
                            </div>
                            <div class="col-md-3">
                                <label for="cidade" class="form-label"><b>Cidade</b></label>
                                <input class="form-control" type="text" name="cidade" value="{{$empresas[$i]['cidade']}}">
                            </div>
                            <div class="col-md-1">
                                <label for="estado" class="form-label"><b>Estado</b></label>
                                <select class="form-select" aria-label="Estado">
                                    <option value="{{$empresas[$i]['estado']}}">{{$empresas[$i]['estado']}}</option>
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
                                <input class="form-control" type="email" name="email" value="{{$empresas[$i]['email']}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="optanteSn" class="form-label"><b>Optante Simples Nacional ?</b></label>
                                <select class="form-select" aria-label="optanteSn">          
                                    <option value="true" @if($empresas[$i]['optanteSn'] == 'true') selected @endif>Sim</option>
                                    <option value="false" @if($empresas[$i]['optanteSn'] == 'false') selected @endif>Não</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="incentivadorCultural" class="form-label"><b>Incentivador Cultural ?</b></label>
                                <select class="form-select" aria-label="incentivadorCultural">
                                    <option value="true" @if($empresas[$i]['incentivadorCultural'] == 'true') selected @endif>Sim</option>
                                    <option value="false" @if($empresas[$i]['incentivadorCultural'] == 'false') selected @endif>Não</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                                <label for="tipoEmissao" class="form-label"><b>Tipo de emissão</b></label>
                                <select class="form-select" aria-label="tipoEmissao">
                                    <option value=1 @if($empresas[$i]['tipoEmissao'] == 1) selected @endif>NFS-e</option>
                                    <option value=2 @if($empresas[$i]['tipoEmissao'] == 2) selected @endif>Danfe</option>
                                    <option value=3 @if($empresas[$i]['tipoEmissao'] == 3) selected @endif>NFS-e e Danfe</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                                <label for="ambiente" class="form-label"><b>Ambiente</b></label>
                                <select class="form-select" aria-label="ambiente">
                                    <option value=1 @if($empresas[$i]['tipoEmissao'] == 1) selected @endif>Produção</option>
                                    <option value=2 @if($empresas[$i]['tipoEmissao'] == 2) selected @endif>Homologação</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                                <label for="status" class="form-label"><b>Status</b></label>
                                <select class="form-select" aria-label="status">
                                    <option value=1 @if($empresas[$i]['status'] == 1) selected @endif>Ativo</option>
                                    <option value=2 @if($empresas[$i]['status'] == 2) selected @endif>Pendente</option>
                                    <option value=3 @if($empresas[$i]['status'] == 3) selected @endif>Inativo</option>
                                    <option value=4 @if($empresas[$i]['status'] == 4) selected @endif>Pagamento em atraso</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                                <label for="clienteMjp" class="form-label"><b>Cliente MJP ?</b></label>
                                <select class="form-select" aria-label="clienteMjp">
                                    <option value="true" @if($empresas[$i]['clienteMjp'] == 'true') selected @endif>Sim</option>
                                    <option value="false" @if($empresas[$i]['clienteMjp'] == 'false') selected @endif>Não</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                                <label for="frequenciaRelatorio" class="form-label"><b>Frequencia de envio</b></label>
                                <select class="form-select" aria-label="frequenciaRelatorio">
                                    <option value=1 >Mensal</option>
                                    <option value=2 >Quinsenal</option>
                                    <option value=3 >Anual</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                                <label for="emailRelatorio" class="form-label"><b>E-mail(s) para receber relatórios</b></label>
                                <input class="form-control" type="email" name="emailRelatorio" value="{{$empresas[$i]['emailsRelatorio']}}">
                            </div>
                            <div class="col-md-3">
                                <label for="garantia" class="form-label"><b>Garantia</b></label>
                                <select class="form-select" aria-label="status">
                                    <option value=0 selected>{{$empresas[$i]['garantia']}}</option>
                                    <option value='semGarantia'>Sem garantia</option>
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
                                <select class="form-select" aria-label="enviaNota">
                                    <option value="true" @if($empresas[$i]['enviaNota'] == true) selected @endif>Sim</option>
                                    <option value="false" @if($empresas[$i]['enviaNota'] == false )  selected @endif>Não</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                                <label for="plataformaEmissao" class="form-label"><b>Plataforma de emissão</b></label>
                                <select class="form-select" aria-label="enviaNota">
                                    <option value="e" @if($empresas[$i]['plataformaEmissao'] == 'E') selected @endif>Enotas</option>
                                    <option value="p" @if($empresas[$i]['plataformaEmissao'] == 'P' )  selected @endif>PlugNotas</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                                <label for="retornoEnotas" class="form-label"><b>Nota sobre a empresa(interno)</b></label>
                                <textarea class="form-control" name="retornoEnotas" id="retornoEnotas"  rows="3" style="height: 60px">{{$empresas[$i]['retornoEnotas']}}</textarea>
                                <small>Máx.240 caracteres</small>
                            </div>
                            <h4>Dados municipais</h4>
                            <hr class="border border-primary border-2 opacity-35">
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>