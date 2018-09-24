mongoose= require('mongoose');
bcrypt= require('bcryptjs');
// Create Schema, which is a class  
schema = new mongoose.Schema({
    username: {type:String, required: true},
    password: {type:String, required: true},
    date: {type: Date, default: Date.now()}
});

// Hash password
schema.methods.encryptPassword= function(password){
    return bcrypt.hashSync(password, bcrypt.genSaltSynct(9), null);
}

// Validate password
schema.methods.validPassword= function(password) {
    return bcrypt.passwordSync(password, this.password);
}   

// Export the model
module.exports.model= mongoose.model('model', schema );