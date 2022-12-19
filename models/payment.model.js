module.exports = (sequelize, Sequelize) => {
    const Invoice = sequelize.define("payments", {
        type: {
            type: Sequelize.STRING
          },
        price: {
            type: Sequelize.DOUBLE
          },
          createdAt: {
            type: Sequelize.DATE,
            allowNull: false,
            defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
          },
          updatedAt:{
            type: Sequelize.DATE,
            allowNull: false,
            defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
          }
    });
  
    return Invoice;
  };