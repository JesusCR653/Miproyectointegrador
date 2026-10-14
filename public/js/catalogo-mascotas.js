/**
 * Catálogo de tipos de mascota y razas.
 * Se usa para llenar dinámicamente el select de "Tipo de mascota"
 * y, según lo elegido, el select de "Raza" correspondiente.
 */
var CATALOGO_MASCOTAS = {
    "Perro": [
        "Mestizo/Criollo", "Labrador Retriever", "Golden Retriever", "Pastor Alemán",
        "Bulldog Francés", "Bulldog Inglés", "Poodle (Caniche)", "Chihuahua",
        "Beagle", "Yorkshire Terrier", "Boxer", "Husky Siberiano", "Schnauzer",
        "Pug", "Rottweiler", "Doberman", "Shih Tzu", "Salchicha (Dachshund)",
        "Border Collie", "Gran Danés", "Cocker Spaniel", "Maltés", "Pitbull",
        "San Bernardo", "Chow Chow", "Basset Hound", "Akita Inu", "Otro"
    ],
    "Gato": [
        "Mestizo/Criollo", "Persa", "Siamés", "Maine Coon", "Angora",
        "Bengalí", "Sphynx (sin pelo)", "British Shorthair", "Ragdoll",
        "Abisinio", "Himalayo", "Azul Ruso", "Bosque de Noruega", "Otro"
    ],
    "Ave": [
        "Periquito Australiano", "Canario", "Cacatúa", "Loro/Perico",
        "Agapornis (Inseparable)", "Ninfa (Cockatiel)", "Guacamayo",
        "Paloma", "Gallina", "Otro"
    ],
    "Reptil": [
        "Iguana", "Tortuga de tierra", "Tortuga acuática", "Gecko Leopardo",
        "Camaleón", "Serpiente Maicera (Corn Snake)", "Boa Constrictor",
        "Dragón Barbudo (Pogona)", "Otro"
    ],
    "Conejo": [
        "Mestizo", "Holandés", "Cabeza de León", "Angora", "Belier (Orejas caídas)",
        "Rex", "Enano de Netherland", "Otro"
    ],
    "Roedor": [
        "Hámster Sirio", "Hámster Ruso", "Cuy (Conejillo de Indias)",
        "Chinchilla", "Ratón", "Rata", "Otro"
    ],
    "Pez": [
        "Betta", "Goldfish (Pez dorado)", "Guppy", "Disco", "Koi", "Otro"
    ],
    "Caballo": [
        "Criollo", "Cuarto de Milla", "Árabe", "Pura Sangre", "Percherón", "Otro"
    ],
    "Otro": [
        "Otro / No especificado"
    ]
};

/**
 * Llena el select de tipo de mascota con todas las especies del catálogo.
 * @param {HTMLSelectElement} selectTipo
 * @param {string} [valorSeleccionado]
 */
function llenarTiposMascota(selectTipo, valorSeleccionado) {
    var placeholder = selectTipo.getAttribute('data-placeholder') || 'Tipo de Mascota';
    var html = '<option value="" disabled ' + (valorSeleccionado ? '' : 'selected') + ' hidden>' + placeholder + '</option>';
    Object.keys(CATALOGO_MASCOTAS).forEach(function (especie) {
        var sel = (especie === valorSeleccionado) ? 'selected' : '';
        html += '<option value="' + especie + '" ' + sel + '>' + especie + '</option>';
    });
    selectTipo.innerHTML = html;
}

/**
 * Llena el select de razas según la especie elegida.
 * @param {HTMLSelectElement} selectRaza
 * @param {string} especie
 * @param {string} [valorSeleccionado]
 */
function llenarRazas(selectRaza, especie, valorSeleccionado) {
    var razas = CATALOGO_MASCOTAS[especie] || [];
    var html = '<option value="" disabled ' + (valorSeleccionado ? '' : 'selected') + ' hidden>Selecciona una raza</option>';
    razas.forEach(function (raza) {
        var sel = (raza === valorSeleccionado) ? 'selected' : '';
        html += '<option value="' + raza + '" ' + sel + '>' + raza + '</option>';
    });
    selectRaza.innerHTML = html;
    selectRaza.disabled = razas.length === 0;
}

/**
 * Calcula edad (años y meses) a partir de una fecha de nacimiento (YYYY-MM-DD)
 * y devuelve { anios, meses, texto }.
 */
function calcularEdadDesdeFecha(fechaStr) {
    if (!fechaStr) return null;
    var hoy = new Date();
    var nacimiento = new Date(fechaStr + 'T00:00:00');
    if (isNaN(nacimiento.getTime()) || nacimiento > hoy) return null;

    var anios = hoy.getFullYear() - nacimiento.getFullYear();
    var meses = hoy.getMonth() - nacimiento.getMonth();
    if (hoy.getDate() < nacimiento.getDate()) {
        meses--;
    }
    if (meses < 0) {
        anios--;
        meses += 12;
    }

    var texto;
    if (anios <= 0 && meses <= 0) {
        texto = 'Recién nacido';
    } else if (anios <= 0) {
        texto = meses + (meses === 1 ? ' mes' : ' meses');
    } else if (meses === 0) {
        texto = anios + (anios === 1 ? ' año' : ' años');
    } else {
        texto = anios + (anios === 1 ? ' año' : ' años') + ' y ' + meses + (meses === 1 ? ' mes' : ' meses');
    }

    return { anios: anios, meses: meses, texto: texto };
}
