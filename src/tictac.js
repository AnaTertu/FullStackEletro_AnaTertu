function time(){
    const name = 'Icaro';
    const element = (
        <div>
            <h1>
                Olá, {name}
            </h1>
            <h2>
                Hora: { new Date().toLocaleTimeString()}.
            </h2>
        </div>
    )
}