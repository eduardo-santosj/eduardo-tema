<div class="row">
  <div class="col-12 col-sm-6">
    <div class="form-group">
      <p>Nome: <span class="required">*</span><br /></p>
        [text* seu-nome class:form-control]
    </div>
  </div>
  <div class="col-12 col-sm-6">
    <div class="form-group">
      <p>E-mail: <span class="required">*</span><br /></p>
        [email* seu-email class:form-control]
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-sm-6">
    <div class="form-group">
      <p>Assunto: <span class="required">*</span><br /></p>
        [select* assunto class:form-control include_blank "Sugestão" "Reclamação" "Dúvida"]
    </div>
  </div>
  <div class="col-12 col-sm-6">
    <div class="form-group">
      <p>Mensagem: <span class="required">*</span><br /></p>
        [textarea* sua-mensagem class:form-control]
    </div>
  </div>
</div>
<div class="float-rigth btn-position">
<p>[submit class:btn class:btn-send "Enviar"]</p>
<span class="text-required">*Obrigatório</span>
</div>